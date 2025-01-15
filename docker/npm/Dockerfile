FROM node:latest

# Create a group only if it doesn't already exist
RUN getent group $GID || groupadd -g $GID appgroup

# Create a user only if it doesn't already exist
RUN id -u $UID || useradd -u $UID -g $GID -m appuser

# Switch to the new user
USER appuser

# Set permissions on the working directory
RUN mkdir -p /var/www/html && chown -R appuser:appgroup /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose the default Vite port
EXPOSE 5173
