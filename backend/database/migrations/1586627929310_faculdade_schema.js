'use strict'

/** @type {import('@adonisjs/lucid/src/Schema')} */
const Schema = use('Schema')

class FaculdadeSchema extends Schema {
  up () {
    this.create('faculdades', (table) => {
      table.increments()
      table.string('nome', 80).notNullable().unique()
      table.string('sigla', 80).notNullable().unique()
      table.timestamps()
    })
  }

  down () {
    this.drop('faculdades')
  }
}

module.exports = FaculdadeSchema
