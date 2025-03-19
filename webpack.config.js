const path = require('path');

const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  cache: true,
  entry: './assets/js/index.js',
  output: {
    path: path.resolve(__dirname, 'assets', 'dist'),
    filename: 'app.[contenthash].js',
    publicPath: ''
  },
  plugins: [
    new WebpackManifestPlugin({
      fileName: 'manifest.json',
      writeToFileEmit: true,
      basePath: ''
    }),
    new MiniCssExtractPlugin({
      filename: '[name].[contenthash].css',
    }),
  ],
  externals: {
    jquery: 'jQuery'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader'
        ]
      },
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
        ]
      }
    ],
  },
  devtool: 'eval-source-map',
};