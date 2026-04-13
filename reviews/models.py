from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator

# Create your models here.
class Review(models.Model):
    project = models.ForeignKey('projects.Project', on_delete=models.CASCADE, related_name='reviews', null=True)
    name = models.CharField("Full Name", max_length=50, default='Anonymous')
    rate = models.IntegerField(
        "Rating",
        validators=[MinValueValidator(1), MaxValueValidator(5)]
    )
    message = models.TextField("Message", null=True)
    date = models.DateTimeField("Date/Time", auto_now_add=True, db_index=True)

    def __str__(self):
        return self.name
    
    class Meta:
        verbose_name = "Review"
        verbose_name_plural = "Reviews"
    
    @property
    def stars(self):
        return range(max(0, min(self.rate, 5)))

    @property
    def empty_stars(self):
        return range(5 - max(0, min(self.rate, 5)))