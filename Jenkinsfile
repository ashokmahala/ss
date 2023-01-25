pipeline {
    agent any

    stages {
        stage('build') {
            steps {
                echo 'Hello World Build'
            }
        }
        stage('test') {
            steps {
                echo 'Hello World Test '
            }
        }
        stage('deploy') {
            steps {
                echo 'Hello World Deploy'
            }
        }
    }
    post
    {
      always
      {
        emailext body: 'summary', replyTo: '1ms21mc010@gmail.com', subject: 'pipeline-notify', to: '1ms21mc010@gmail.com'
      }
    }
}
