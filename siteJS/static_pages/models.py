from django.db import models

# Create your models here.

class Imoveis(models.Model):

  TIPOS = (
    ('CASA','CASA'),
    ('APARTAMENTO','APARTAMENTO'),
    ('TERRENO','TERRENO'),
    ('PONTO COMERCIAL','PONTO COMERCIAL'),
  )

  LOCACAO = (
    ('VENDA','VENDA'),
    ('ALUGUEL','ALUGUEL'),
  )

  nome = models.CharField(max_length=255)
  descricao = models.TextField()
  tipo = models.CharField(max_length=15,choices=TIPOS,)

  created_at = models.DateTimeField(auto_now_add=True)
  updated_at = models.DateTimeField(auto_now=True)

  quartos = models.CharField(max_length=255)
  salas = models.CharField(max_length=255)
  banheiros = models.CharField(max_length=255)
  servicos = models.CharField(max_length=255)
  cozinhas = models.CharField(max_length=255)
  garagens = models.CharField(max_length=255)
  area = models.CharField(max_length=255)

  valor = models.CharField(max_length=255)
  rua = models.CharField(max_length=255)
  bairro = models.CharField(max_length=255)
  cidade = models.CharField(max_length=255)
  cep = models.CharField(max_length=255)
  locacao = models.CharField(max_length=10,choices=LOCACAO,)

  def __str__(self):
    return self.nome