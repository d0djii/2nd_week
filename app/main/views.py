from django.shortcuts import render

def index(request):
  context = {
    'title': 'Авторизация',

  }
  return render(request, 'main/index.html', context)

# Create your views here.
