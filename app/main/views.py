from django.shortcuts import render

def index(request):
  context = {
    'title': 'Авторизация',

  }
  return render(request, 'main/index.html', context)

def register(request):
  return render(request, 'main/register.html')
# Create your views here.
