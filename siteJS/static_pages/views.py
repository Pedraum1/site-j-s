from django.shortcuts import render

# Create your views here.

def homepage(request):
    return render(request, 'views/homepage.html')

def about(request):
    return render(request, 'views/about.html')

def services(request):
    return render(request, 'views/services.html')

def contact(request):
    return render(request, 'views/contact.html')

def lista (request):
  return render(request, 'views/imovelList.html')

def descricao (request):
  return render(request, 'views/imovelDesc.html')