from django.shortcuts import render
from .models import Reviews

def reviews(request, project_id=None):

    qs = Reviews.objects.all().order_by('-date')

    if project_id:
        qs = qs.filter(project_id=project_id)

    return render(request, 'reviews/reviews.html', {
        'reviews': qs
    })