<template>
    <div>
        <h1>{{ message }}</h1>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello, world!'
            }
        }
    }
</script>
<!-- //   import axios from 'axios';

//   export default {
//     name: 'Setting',
//     data() {

//       return {
//         message: ''
//       };
//     },
//     mounted() {
//       axios.get('/home')
//         .then(response => {
//           this.message = response.data.message;
//         })
//         .catch(error => {
//           console.log(error);
//         });
//     }
//   }; -->
<!-- //   </script> -->
