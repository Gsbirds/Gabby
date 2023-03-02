from django.db import models

class Projects(models.Model):
    title=models.CharField(max_length=200)
    description=models.TextField()
    languages=models.CharField(max_length=200)
    picture=models.URLField()
