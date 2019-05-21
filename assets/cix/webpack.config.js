// Webpack 4
const webpack                 = require('webpack');
const path                    = require('path');
const MiniCssExtractPlugin    = require("mini-css-extract-plugin");
const CleanWebpackPlugin      = require('clean-webpack-plugin');

const config = (env,arg) => {

  return {

    entry: {
      cix: './assets/cix/src/cix.js',
    },

    output: {
      path: path.resolve( __dirname, 'dist' ),
      filename: '[name].js'
    },

    module: {
      rules: [

        // Javascript
        {
          test: /\.js$/,
          exclude: /node_modules/,
          loader: 'babel-loader'
        },

        // SASS
        {
          test: /\.[s]?css$/,
          use: [
            'style-loader',
            MiniCssExtractPlugin.loader,
            { 
              loader: 'css-loader',
                options: { 
                  importLoaders: 2
                }
            },
            'sass-loader',
            { 
              loader : 'postcss-loader',
              options: {
                config : { 
                  path : path.resolve( __dirname, 'postcss.config.js' )
                }
              }
            },
          ]
        },
      ]
    },

    // Plugins
    plugins: [
      new webpack.ProgressPlugin(),
      // clean distro
      new CleanWebpackPlugin(),
      // css file name
      new MiniCssExtractPlugin({ filename: '[name].css' }),
      // external jquery
      // new webpack.ProvidePlugin({  $: 'jquery', jQuery: 'jquery' }), 

      //new UglifyJsPlugin({ cache: true, parallel: true, sourceMap: true }),
    ],
  }
}


module.exports = config;