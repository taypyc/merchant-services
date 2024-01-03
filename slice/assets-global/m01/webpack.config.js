const path = require('path')
const webpack = require('webpack')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const TerserPlugin = require("terser-webpack-plugin");

let conf = {
  context: path.resolve(__dirname, './'),
  entry: {
    vendors: './js/dev/vendors.webpack.js',
  },
  // if multiple entry points require jquery
  //externals: /^(jquery|\$)$/i,
  output: {
    path: path.resolve(__dirname, './js/'),
    filename: '[name].js',
    publicPath: 'js/'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules.(?!(bootstrap))/,
        loader: 'babel-loader',
      },
      {
        test: /\.(sass|scss)$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader',
            options: {
              // minimize: true,
              sourceMap: true
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                ident: 'postcss',
                plugins: [
                  require('autoprefixer')({
                    cascade: false
                  }),
                  require('css-mqpacker')({
                    // sort: true
                    sort: require('sort-css-media-queries').desktopFirst
                  })
                ]
              }
            }
          },
          {
            loader: 'sass-loader',
            options: {
              sassOptions: {
                outputStyle: 'expanded'
              },
              sourceMap: true
            }
          }
        ]
      },
      {
        test: /\.(css)$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader',
            options: {
              /*minimize: {
                discardComments: { removeAll: true }
              },*/
              sourceMap: true
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                ident: 'postcss',
                plugins: [
                  require('autoprefixer')({
                    cascade: false
                  })
                ]
              }
            }
          },
        ]
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/,
        loader: 'file-loader',
        options: {
          // context: path.resolve(__dirname, "./www/css/vendors/"),
          publicPath: '../img/',
          outputPath: '../img/',
          name: 'vendors.[name].[ext]',
          // emitFile: false
        }
      },
      {
        test: /\.(woff|woff2)/,
        loader: 'file-loader',
        options: {
          // context: path.resolve(__dirname, "./www/css/vendors/"),
          publicPath: 'fonts/',
          outputPath: '../css/fonts/',
          name: '[name].[ext]',
        }
      }
    ]
  },
  plugins: [
    new webpack.NoEmitOnErrorsPlugin(),
    new MiniCssExtractPlugin({
      //path: path.resolve(__dirname, 'www/css/vendors/'),
      filename: '../css/[name].css',
    }),
  ],
  optimization: {
    splitChunks: {
      cacheGroups: {
        cssVendors: {
          test: /(node_modules[\\/]|vendors[\\/]).+\.(css|sass|scss)$/,
          name: 'vendors',
          chunks: 'all',
          minChunks: 2
        },
        jsCommons: {
          test: /!(node_modules[\\/]|vendors[\\/])\.js$/,
          name: 'commons',
          chunks: 'all',
          minChunks: 2
        },
        jsVendors: {
          test: /(node_modules[\\/]|vendors[\\/]).+\.js$/,
          name: 'vendors.inc',
          chunks: 'all',
          minChunks: 2
        }
      }
    },
    minimizer: [
      new TerserPlugin()
    ]
  },
  mode: 'production',
  // devtool: 'inline-source-map'
}

module.exports = function(env, opts) {
  const devMode = opts.mode === 'development';
  return conf;
}