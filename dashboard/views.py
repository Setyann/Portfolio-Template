from django.shortcuts import render, redirect

# Create your views here.
def is_authenticated(request):
    return request.user.is_authenticated

def dashboard(request):
    if not is_authenticated(request):
        return redirect("home")
    return render(request, 'dashboard/dashboard.html')

def dashboard_projects(request):
    if not is_authenticated(request):
        return redirect("home")
    return render(request, 'dashboard/dashboard_projects.html')

def create_project(request):
    if not is_authenticated(request):
        return redirect("home")
    return render(request, 'dashboard/create_project.html')

def dashboard_about(request):
    if not is_authenticated(request):
        return redirect("home")
    return render(request, 'dashboard/dashboard_about.html')

def dashboard_feedback(request):
    if not is_authenticated(request):
        return redirect("home")
    return render(request, 'dashboard/dashboard_feedback.html')