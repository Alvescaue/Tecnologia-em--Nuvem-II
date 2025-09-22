# Use a imagem oficial do PHP com Apache como base
FROM php:8.1-apache

# Habilitar mod_rewrite (se necessário para seu caso)
RUN a2enmod rewrite

# Copie os arquivos PHP para o diretório de documentos do Apache
COPY . /var/www/php/

# Defina o diretório de trabalho
WORKDIR /var/www/php/

# Permite que o Apache use o arquivo index.php
RUN chmod -R 755 /var/www/html/

# Exponha a porta padrão para o Apache (porta 80)
EXPOSE 80

# Inicie o Apache em modo foreground
CMD ["apache2-foreground"]
