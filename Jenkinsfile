pipeline {
 
  agent {
    kubernetes {
      label 'che-website-pod'
      yaml """
apiVersion: v1
metadata:
  labels:
    run: che-website-pod
  name: che-website-pod
spec:
  containers:
    - name: jnlp
      volumeMounts:
      - mountPath: /home/jenkins/.ssh
        name: volume-known-hosts
      env:
      - name: "HOME"
        value: "/home/jenkins/agent"
  volumes:
  - configMap:
      name: known-hosts
    name: volume-known-hosts
"""
    }
  }
 
  environment {
    PROJECT_NAME = "che"
    PROJECT_BOT_NAME = "CHE Bot"
  }
 
  triggers { pollSCM('H/10 * * * *') 
 
 }
 
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
    checkoutToSubdirectory('che-website')
  }
 
  stages {
    stage('Checkout www repo') {
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
    stage('Push to $env.BRANCH_NAME branch') {
      when {
        branch 'master'
      }
      steps {
        sh 'ls -la'
        dir('www') {
            sshagent(['git.eclipse.org-bot-ssh']) {
                sh '''
                cd "${WEBSITE}"
                cp -Rvf ../che-website/che/* .
                git status
                echo $(pwd)
                git add -A
                git status
                '''
            }
        }
      }
    }
  }
}

