# Imagem base oficial do PHP com Apache
FROM php:8.1-apache

# Instala dependências necessárias (se necessário)
RUN apt-get update && apt-get install -y \
    vim \
    && rm -rf /var/lib/apt/lists/*

# Habilita o mod_rewrite do Apache
RUN a2enmod rewrite

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia o código PHP para o container
COPY . /var/www/html/

# Define a permissão de acesso para os arquivos
RUN chown -R www-data:www-data /var/www/html

# Expondo a porta 80, que é a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
