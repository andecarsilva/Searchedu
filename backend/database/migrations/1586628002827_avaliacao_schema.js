'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class AvaliacaoSchema extends Schema {
  up () {
    this.create('avaliacaos', (table) => {
      table.increments()
      table.string('nome_user', 80).notNullable()
      table.string('email_user', 80).notNullable()
      table.string('nome_faculdade', 80).notNullable()
      table.string('nota', 80).notNullable()
      table.string('mensagem', 80).notNullable()
      table.timestamps()
    })
  }

  down () {
    this.drop('avaliacaos')
  }
}

module.exports = AvaliacaoSchema
