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
    order = models.PositiveIntegerField(default=0)
    is_active = models.BooleanField(default=True)

    class Meta:
        ordering = ["order"]

class Skill(models.Model):
    name = models.CharField(max_length=100)
    level = models.PositiveSmallIntegerField(default=0)

    def save(self, *args, **kwargs):
        if self.level > 100:
            self.level = 100
        if self.level < 0:
            self.level = 0
        super().save(*args, **kwargs)