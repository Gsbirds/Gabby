# Generated by Django 4.1.7 on 2023-03-13 20:06

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('main', '0002_remove_projects_picture'),
    ]

    operations = [
        migrations.AddField(
            model_name='projects',
            name='picture',
            field=models.ImageField(null=True, upload_to='images/'),
        ),
    ]