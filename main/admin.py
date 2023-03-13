from django.contrib import admin
from main.models import Projects

class ProjectAdmin(admin.ModelAdmin):
    list_display=(
        "title",
        "description",
        "id",
        "picture"
    )
admin.site.register(Projects, ProjectAdmin)
