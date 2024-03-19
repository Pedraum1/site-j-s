# Generated by Django 5.0.2 on 2024-03-16 15:38

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Imoveis',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nome', models.CharField(max_length=255)),
                ('descricao', models.TextField()),
                ('tipo', models.CharField(choices=[(1, 'CASA'), (2, 'APARTAMENTO'), (3, 'TERRENO'), (4, 'PONTO')], max_length=15)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
                ('quartos', models.CharField(max_length=255)),
                ('salas', models.CharField(max_length=255)),
                ('banheiros', models.CharField(max_length=255)),
                ('servicos', models.CharField(max_length=255)),
                ('cozinhas', models.CharField(max_length=255)),
                ('garagens', models.CharField(max_length=255)),
                ('area', models.CharField(max_length=255)),
                ('valor', models.CharField(max_length=255)),
                ('rua', models.CharField(max_length=255)),
                ('bairro', models.CharField(max_length=255)),
                ('cidade', models.CharField(max_length=255)),
                ('cep', models.CharField(max_length=255)),
                ('locacao', models.CharField(max_length=255)),
            ],
        ),
    ]
