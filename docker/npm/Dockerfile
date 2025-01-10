FROM node:latest

# Create a non-root user
RUN adduser --disabled-password --gecos "" appuser && \
    mkdir -p /var/www/html && chown -R appuser:appuser /var/www/html

USER appuser
WORKDIR /var/www/html
