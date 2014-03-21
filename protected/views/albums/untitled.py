db.grades.find({"student_id":5}).pretty()
db.students.find({"student_id":5}).limit(2).pretty()
db.students.find({"student_id":5}).count()
db.students.find({"student_id":5,"class_id":30}).pretty()



2.4
db.grades.find({"type":"quiz"}).pretty().sort({"score":1}).limit(1)

PK = student_id // class_id (combinació de les dos id)




1.- Crear virtualenv
2.-pip install
3.- Download package tar.gz
4.- Python blog Python
5.- Patch the code


packages to install : bottle,pymongo

db.users.save({"username":"enric","password":"1234"})
db.users.findOne()
db.users.update({"username":"enric"},{"tags":"teacher"})//not good

add smthng:

db.users.update({"username":"enric"},{$set:{"tags":[]}})



  Issues:
    1. We were unable to clone your application's git repo - The directory
you are cloning into already exists.

  Steps to complete your configuration:
    1. Clone your git repo
      $ rhc git-clone openshiftquiz

  If you continue to experience problems after completing these steps,
  you can try destroying and recreating the application:

    $ rhc app delete openshiftquiz --confirm

  Please contact us if you are unable to successfully create your
  application:

    Support - https://www.openshift.com/support

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



Your application 'openshiftquiz' is now available.

  URL:        http://openshiftquiz-soraiku.rhcloud.com/
  SSH to:     532b4f344382ecc2310001c5@openshiftquiz-soraiku.rhcloud.com
  Git remote: ssh://532b4f344382ecc2310001c5@openshiftquiz-soraiku.rhcloud.com/~/git/openshiftquiz.git/

Run 'rhc show-app openshiftquiz' for more details about your app.


1474800386069555   //683d43f53651223d01eb7cd8d3a7b4e4



sudo /usr/share/webmin/changepass.pl /etc/webmin root sra-45-ls