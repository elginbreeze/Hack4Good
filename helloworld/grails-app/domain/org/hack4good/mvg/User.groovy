package org.hack4good.mvg

class User {

    String username
    String password
    String firstName
    String lastName
    String email
    int rating


    static constraints = {
        email(blank: false, unique: true)
        username(blank: false)
        firstName(blank: false)
        lastName(blank: false)
    }
}
