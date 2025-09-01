#usa imagem oficial do PHP Apache
FROM php:8.2-apache

#Porta usada pela Render
ENV PORT=8080

#Ativa o mod_rewrite para URLs amigaveis
RUN a2enmod rewrite

#Copia o codigo da aplicação
COPY . /var/www/html/

#Corrige permissoes 
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

#Corrige configuração da porta
RUN sed -i "s/Listen 80/Listen${PORT/"} /etc/apache2/apache2.conf &&\
    sed =i "s/<VirtualHost \*:80>/VirtualHoste \*:{PORT>}/' /etc/apache/apache2/sites-avaible/000-default.conf

  #Permite acesso ao diretorio
  RUN echo'<Directory /var/www/html>' >> /etc/apache2/apache2.conf &&\
      echo'  Options Indexes FollowSymLinks' >> /etc/apache2/apache2.conf &&\
      echo'  AllowOverride All' >> /etc/apache2/apache2.conf &&\
      echo'  REquire all grantec' >> /etc/apache2/apache2.conf &&\
      echo' </Directory>' >> /etc/apache2/apache2.conf &&\

  #Expoe a porta corretamente
  EXPOSE ${PORT}    

  #inicia o apache
  CMD ["apache2=foreground"]
