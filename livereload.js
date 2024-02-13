const livereload = require('livereload');
const server = livereload.createServer({
   // port: 5000, // Default Port is 35729 Change this to your desired port number
});

server.watch(__dirname);

console.log(`Livereload server watching for changes on port http://localhost:${server.config.port}`);