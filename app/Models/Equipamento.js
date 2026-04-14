module.exports = (sequelize, DataTypes) => {
  const Equipamento = sequelize.define('Equipamento', {
    id_equipamento: {
      type: DataTypes.INTEGER,
      primaryKey: true,
      autoIncrement: true
    },
    nome: {
      type: DataTypes.STRING,
      allowNull: false
    },
    descricao: {
      type: DataTypes.STRING
    }
  }, {
    tableName: 'equipamentos',
    timestamps: false
  });

  return Equipamento;
};