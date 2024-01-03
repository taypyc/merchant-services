module.exports = function (api) {
  api.cache(true);
  //api.cache.never();

  const presets = [
    '@babel/preset-env'
  ];
  const plugins = [];

  return {
    presets,
    plugins
  };
};