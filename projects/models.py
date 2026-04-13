# models.py
from django.db import models
from django.utils.text import slugify
import os
import uuid

class Project(models.Model):
    title = models.CharField("Project Title", max_length=100)
    anons = models.CharField("Project Anons", max_length=250)
    full_desc = models.TextField("Project Description")
    project_url = models.URLField(blank=True, null=True)

    def __str__(self):
        return self.title
    
    class Meta:
        verbose_name = "Project"
        verbose_name_plural = "Projects"

def project_image_path(instance, filename):
    ext = filename.split('.')[-1]
    filename = f"{uuid.uuid4()}.{ext}"
    return os.path.join("projects", str(instance.project_id), filename)

class ProjectImage(models.Model):
    project = models.ForeignKey(Project, on_delete=models.CASCADE, related_name='images')
    image = models.ImageField(upload_to=project_image_path)

    def __str__(self):
        return f"{self.project.title} image"
    
    class Meta:
        verbose_name = "Project Image"
        verbose_name_plural = "Project Images"