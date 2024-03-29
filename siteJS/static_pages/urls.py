from django.urls import path
from . import views

urlpatterns = [
    path('', views.homepage, name='homepage'),
    path('about/', views.about, name='about'),
    path('services/', views.services, name='services'),
    path('contact/', views.contact, name='contact'),
    path('imoveis/', views.lista, name='lista'),
    path('imovel/<int:id>/', views.descricao, name='descricao'),
]