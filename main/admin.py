from django.contrib import admin
from .models import SiteContent, FAQ, Skill

# Register your models here.
admin.site.register(SiteContent)
admin.site.register(FAQ)
admin.site.register(Skill)