const path = require('path');

module.exports = {
    mode: 'development', //modo de desenvolvimento
    entry: './src/index.js', //entrada do arquivo
    output: {
        filename: 'bundle.js', //output do arquivo
        path: path.resolve(__dirname,'assets/js'), //pasta onde vai estar o arquivo
    },
};