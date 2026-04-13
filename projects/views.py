from django.shortcuts import render, get_object_or_404
from .models import Project
from django.db.models import Prefetch

def projects(request):
    projects = Project.objects.all().order_by('-id') # Order by newest first
    return render(request, 'projects/projects.html', {'projects': projects})


def project_detail(request, project_id):
    project = get_object_or_404(
        Project.objects.prefetch_related('images', 'reviews'),
        id=project_id
    )

    latest_reviews = project.reviews.all().order_by('-date')[:3]

    return render(request, 'projects/project_detail.html', {
        'project': project,
        'latest_reviews': latest_reviews
    })