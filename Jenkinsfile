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
      image: docker.io/node:16.14.0-bullseye
      tty: true
      resources:
        limits:
          memory: "2Gi"
          cpu: "1"
        requests:
          memory: "2Gi"
          cpu: "1"
      volumeMounts:
      - name: volume-known-hosts
        mountPath: /home/jenkins/.ssh
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
                    GIT_SSH_COMMAND="ssh -o StrictHostKeyChecking=no" git clone ssh://genie.${PROJECT_NAME}@git.eclipse.org:29418/www.eclipse.org/${PROJECT_NAME}.git .
                    git checkout master
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
        dir ('www') {
          sh '''
            # Install all dependencies
            yarn
            # Generate build
            yarn build
            ls -la build
          '''
        }
        }
      }
    }    
    stage('Push to $env.BRANCH_NAME branch') {
      when {
        branch 'main'
      }
      steps {
        sh 'ls -la'
        dir('www') {
            sshagent(['git.eclipse.org-bot-ssh']) {
                sh '''
                echo $(pwd)
                ls -la
                cd "${WEBSITE}"
                echo $(pwd)
                ls -la
                
                '''
/*
                cp -Rvf ../che-website/che/* .
                git add -A
                if ! git diff --cached --exit-code; then
                  echo "Changes have been detected, publishing to repo 'www.eclipse.org/${PROJECT_NAME}'"
                  git config --global user.email "${PROJECT_NAME}-bot@eclipse.org"
                  git config --global user.name "${PROJECT_BOT_NAME}"
                  export DOC_COMMIT_MSG=$(git log --oneline --format=%B -n 1 HEAD | tail -1)
                  git commit -m "[website] ${DOC_COMMIT_MSG}"
                  git log --graph --abbrev-commit --date=relative -n 5
                  git push origin HEAD:${BRANCH_NAME}
                else
                  echo "No change have been detected since last build, nothing to publish"
                fi
*/
            }
        }
      }
    }
  }
}
