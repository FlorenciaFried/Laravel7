<template>
  <input
    type="submit"
    class="btn btn-danger mr-1 d-block w-100 mb-2"
    value="Eliminar"
    @click="eliminarReceta"
  />
</template>

<script >
export default {
  props: ['recetaId'],
  methods: {
    eliminarReceta() {
      this.$swal({
        title: '¿Deseas eliminar esta receta?',
        text: 'Una vez eliminada, no se puede recuperar',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#d33',
        confirmButtonColor: 'Sí',
        cancelButtonText: 'No',
      }).then((result) => {
        if (result.value) {
          const params = {
            id: this.recetaId
          }

          // Enviar la peticion al servidor
          axios.post(`/recetas/${this.recetaId}`, { params, _method: 'delete' })
            .then(respuesta => {
              this.$swal({
                title: 'Receta eliminada',
                text: 'Se eliminó la receta',
                icon: 'success',
              });

              // Eliminar receta del dom
              this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode)
            })
            .catch(error => { console.log(error) })
        }
      })
    }
  },
}
</script>