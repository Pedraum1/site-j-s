from django.shortcuts import render

# Create your views here.

def crud_view(request):
  return render(request, 'views/adminView.html')