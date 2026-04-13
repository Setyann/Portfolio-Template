from django.db import models

# Create your models here.
class SiteContent(models.Model):
    key = models.CharField(max_length=100, unique=True)
    title = models.CharField(max_length=255, blank=True)
    content = models.TextField()

    def __str__(self):
        return self.key

class FAQ(models.Model):
    question = models.CharField(max_length=255)
    answer = models.TextField()

    def __str__(self):
        return self.question

class Skill(models.Model):
    name = models.CharField(max_length=100)
    level = models.IntegerField(default=0)  # %

    def __str__(self):
        return self.name