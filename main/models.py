from django.db import models

class Projects(models.Model):
    title=models.CharField(max_length=200)
    description=models.TextField()
    languages=models.CharField(max_length=200)
<<<<<<< HEAD
    picture= models.ImageField(upload_to='images/', default=None)
=======
    picture=models.URLField()
>>>>>>> 066419e45c66e5d7bd7bfd7e06c6909b87e86268
