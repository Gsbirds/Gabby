from django.shortcuts import render
from .models import Projects

def show_main(request):
    projects = Projects.objects.all()
    context = {
        "projects": projects,
    }
    return render(request, "main/Gabby.html", context)
