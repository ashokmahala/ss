pipeline {
    agent any

    stages 
    {
        stage('Build') 
        {
            steps 
            {
                echo 'THIS IS TO BUILD AN APP'
            }
        }
        stage('Test') 
        {
            steps 
            {
                echo 'THIS IS TO TEST AN APP'
            }
        }
        stage('Deploy') 
        {
            steps 
            {
                echo 'THIS IS TO DEPLOY AN APP'
            }
        }
    }
    post
  {
    always
    {
      emailext body: 'Summary', replyTo: 'divyagupta0642@gmail.com', subject: 'Pipeline-Notify', to: 'divyagupta0642@gmail.com'
    }
  }
}
