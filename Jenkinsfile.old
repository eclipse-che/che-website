pipeline {
 
  agent any
 
  environment {
    PROJECT_NAME = "che"
    PROJECT_BOT_NAME = "CHE Bot"
  }
 
  triggers { pollSCM('H/10 * * * *') 
 
 }
 
  options {
    buildDiscarder(logRotator(numToKeepStr: '5'))
    checkoutToSubdirectory('che-website')
    disableConcurrentBuilds() 
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
                '''
            }
        }
      }
    }
  }
}

