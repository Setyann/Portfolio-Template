from django.shortcuts import render
from projects.models import Project

# Create your views here.
def home(request):
    projects = Project.objects.order_by("-id")[:3]  # Get the 3 most recent projects
    return render(request, 'main/index.html', {'projects': projects})

def about(request):
    return render(request, 'main/about.html')