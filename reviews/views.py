from django.shortcuts import render
from .models import Review

def reviews(request, project_id=None):

    qs = Review.objects.all().order_by('-date')

    if project_id:
        qs = qs.filter(project_id=project_id)

    return render(request, 'reviews/reviews.html', {
        'reviews': qs
    })