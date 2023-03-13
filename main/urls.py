from django.urls import path
from main.views import show_main

urlpatterns = [
    path("main/", show_main),
]
