pipeline {
 
  agent {
    kubernetes {
      label 'che-website-pod'
      defaultContainer 'jnlp'
      yaml '''
apiVersion: v1
kind: Pod
metadata:
  labels:
    run: che-website-pod
  name: che-website-pod
spec:
  containers:
    - name: jnlp
      image: 'eclipsecbi/jenkins-jnlp-agent'
      args: ['\$(JENKINS_SECRET)', '\$(JENKINS_NAME)']
      volumeMounts:
      - mountPath: /home/jenkins/.ssh
        name: volume-known-hosts
      env:
      - name: "HOME"
        value: "/home/jenkins/agent"
      resources:
        limits:
          memory: "512Mi"
          cpu: "200m"
        requests:
          memory: "512Mi"
          cpu: "200m"
    - name: website-buildenv
      image: node:16.14.0-bullseye
      tty: true
      resources:
        limits:
          memory: "2Gi"
          cpu: "1"
        requests:
          memory: "2Gi"
          cpu: "1"
  volumes:
  - name: volume-known-hosts
    configMap:
      name: known-hosts
    '''
    }
  }
 
  environment {
    PROJECT_NAME = "che"
    PROJECT_BOT_NAME = "CHE Bot"
    CI = true
  }
 
  triggers { pollSCM('H/10 * * * *') 
 
 }
 
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
    disableConcurrentBuilds() 
  }
 
  stages {
    stage('Checkout') {
      steps {
       container('jnlp') {
        dir('www') {
            sshagent(['git.eclipse.org-bot-ssh']) {
                sh '''
                    GIT_SSH_COMMAND="ssh -o StrictHostKeyChecking=no" git clone git@github.com:eclipse-che/che-website-publish.git.
                    git checkout master
                    echo "end of checkout"
                    echo $(pwd)
                '''
            }
        }
       }
      } 
    }
    stage('Generate site') {
      steps {
        container('website-buildenv') {
        echo 'Building..'
          sh '''
            echo "Building.."
            # use a writable directory for the build
            export HOME=/tmp/yarn
            # Install all dependencies
            yarn
            # Generate build
            yarn build
            # Copy build result
            cp -r build/che/* www/
          '''
        }
      }
    }    
    stage('Push to $env.BRANCH_NAME branch') {
      when {
        branch 'main'
      }
      steps {
        dir('www') {
            sshagent(['git.eclipse.org-bot-ssh']) {
                sh '''
                git add -A
                if ! git diff --cached --exit-code; then
                  echo "Changes have been detected, publishing to repo 'www.eclipse.org/${PROJECT_NAME}'"
                  git config --global user.email "${PROJECT_NAME}-bot@eclipse.org"
                  git config --global user.name "${PROJECT_BOT_NAME}"
                  export WEBSITE_COMMIT_MSG=$(git log --oneline --format=%B -n 1 HEAD | tail -1)
                  git commit -m "[website] ${WEBSITE_COMMIT_MSG}"
                  git log --graph --abbrev-commit --date=relative -n 5
                  git push origin HEAD:master
                else
                  echo "No change have been detected since last build, nothing to publish"
                fi
                '''
            }
        }
      }
    }
  }
}
