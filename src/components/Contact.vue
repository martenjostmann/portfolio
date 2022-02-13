<template>
    <v-row class="contact mt-15">
        <v-spacer />
        <v-col md="8">
            <p class="text-h4 mt-15">
            Kontakt
            </p>
            <hr class='title_line' />

            <v-form
            ref="form"
            v-model="valid"
            lazy-validation
            v-on:submit="sendEmail"
            >
                <v-row>
                    <v-spacer />
                    <v-col md="8" class="mt-5">
                        <v-row>
                            <v-col>
                                <v-text-field
                                    v-model="form.firstname"
                                    name="firstname"
                                    :rules="nameRules"
                                    label="Vorname"
                                    required
                                    outlined
                                ></v-text-field>
                            </v-col>
                            <v-col>
                                <v-text-field
                                    v-model="form.surname"
                                    name="surname"
                                    :rules="nameRules"
                                    label="Nachname"
                                    required
                                    outlined
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row class="mt-n8">
                            <v-col>
                                <v-text-field
                                    v-model="form.email"
                                    name="email"
                                    :rules="emailRules"
                                    label="E-mail"
                                    required
                                    outlined
                                ></v-text-field>
                            </v-col>
                        </v-row>

                        <v-row class="mt-n8">
                            <v-col>
                                <v-textarea
                                    v-model="form.message"
                                    name="message"
                                    label="Nachricht"
                                    required
                                    outlined
                                    outline
                                ></v-textarea>
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-spacer />
                            <v-col md="2" class="mt-n8 mb-10">
                                <v-btn
                                    :disabled="!valid"
                                    class="mr-4"
                                    color="primary"
                                    @click="sendEmail"
                                    >
                                    Senden
                                </v-btn>
                            </v-col>
                        </v-row>
                            
                    </v-col>
                    <v-spacer />
                   
                </v-row>
             
            </v-form>
        </v-col>
        <v-spacer />
    </v-row>
</template>

<script>
    const querystring = require("querystring");
    import axios from 'axios'
   

    export default {
        name: 'ContactUs',
        data() {
            return {
                sent: false,
                form: {
                    firstname: '',
                    surname: '',
                    email: '',
                    message: ''
                }
            }
        },
        methods: {
            sendEmail(e) {
            try {
                 e.preventDefault();
                axios.post(
                    "http://localhost:8080/mail_service.php",
                    querystring.stringify(this.form)
                ).then(res => {
                    console.log(res);
                    this.sent = true;
                })

            } catch(error) {
                console.log({error})
            }
            // Reset form field
            this.firstname = ''
            this.surname = ''
            this.email = ''
            this.message = ''
            },
        }
    }
</script>

<style scoped>
.title_line{
  height: 5px;
  width: 70px;
  margin-top: -10px;
  background-color: #42a5f4;
  border: none;
}
.contact{
  background: #ebebeb;
}
</style>