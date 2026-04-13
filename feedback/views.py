from django.shortcuts import render, redirect
from reviews.models import Review
from .forms import ReviewForm

# Create your views here.
def feedback(request):
    error = ''
    if request.method == 'POST':
        form = ReviewForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('feedback')
        else:
            error = 'There was an error submitting your review. Please try again.'
    else:
        form = ReviewForm()
    reviews = Review.objects.order_by('-id')[:6]
    return render(request, 'feedback/feedback.html', {'reviews': reviews, 'form': form, 'error': error})