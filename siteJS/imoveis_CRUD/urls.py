from django.urls import path
from . import views

urlpatterns = [
  path('', views.crud_view, name='adm_view')
  
]