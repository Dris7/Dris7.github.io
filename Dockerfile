# Use the Nginx image from Docker Hub
FROM nginx:alpine

# Copy the static website files into the Nginx server directory
COPY /path/to/your/static/app /usr/share/nginx/html

# Expose port 80
EXPOSE 80

# Start Nginx when the container launches
CMD ["nginx", "-g", "daemon off;"]
