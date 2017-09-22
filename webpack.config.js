const path = require("path");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' );
const CopyWebpackPlugin = require('copy-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const WriteFilePlugin = require('write-file-webpack-plugin');

const proxy_url = 'stamatisan/production/';
const developmentDir = './devel';
const productionDir = 'production/wp-content/themes/stamatisan/';

module.exports = {
  entry: {
    app: [ developmentDir + "/js/index.js"]
  },
  output: {
    path: path.resolve(__dirname, productionDir + "js"),
    filename: "bundle.js",
    publicPath: productionDir
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: "css-loader"
        }),
        exclude: /node_modules/
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: [
            'file-loader'
        ]
      },
      {
        test: /\.(php)$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]'
            }
        }
    ]},
    { test: /\.woff(2)?(\?v=[0-9]\.[0-9]\.[0-9])?$/, loader: "url-loader" },
    { test: /\.(ttf|eot|svg)(\?v=[0-9]\.[0-9]\.[0-9])?$/, loader: "url-loader" }
]
},

plugins: [
    new ExtractTextPlugin("./../style.css"),
    new BrowserSyncPlugin( {
        port: 8080,
        proxy: 'http://localhost/' + proxy_url,
        online: true,
        reloadDelay: 0,
        files: ["./devel/**/*.php"]
    }),
    new CopyWebpackPlugin([{
      context: './devel', from: '**/*', to: path.resolve(productionDir)
    }]),
    new WriteFilePlugin(),
    new CleanWebpackPlugin([productionDir])
]
};