from django.shortcuts import render,get_object_or_404
from django.core.paginator import Paginator

from .models import Imoveis

# Create your views here.

def homepage(request):
    imoveis_list = Imoveis.objects.all().order_by('-created_at').values()

    paginator = Paginator(imoveis_list, 4)

    page = request.GET.get('page')

    imoveis = paginator.get_page(page)

    return render(request, 'views/homepage.html', {'imoveis':imoveis})

def about(request):
    return render(request, 'views/about.html')

def services(request):
    return render(request, 'views/services.html')

def contact(request):
    return render(request, 'views/contact.html')

def lista (request):
    imoveis_list = Imoveis.objects.all().order_by('-created_at').values()

    paginator = Paginator(imoveis_list, 10)

    page = request.GET.get('page')

    imoveis = paginator.get_page(page)
    return render(request, 'views/imovelList.html', {'imoveis':imoveis})

def descricao (request, id):
  imovel = get_object_or_404(Imoveis, pk=id)
  return render(request, 'views/imovelDesc.html', {'imovel':imovel})