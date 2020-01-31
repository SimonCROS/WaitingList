class Connection {

    constructor(socket) {
        this.socket = socket;

        var address = socket.request.connection.remoteAddress;
        console.log('New connection from ' + address.split(":")[address.split(":").length - 1]);
        this.address = address;
    }

    getAddress() {
        return this.address;
    }

    getSocket() {
        return this.socket;
    }

    registerCommand(command, callback) {
        this.getSocket().on(command, (message) => {
            callback(message, this);
        });
    }

    onDisconnect(callback) {
        this.getSocket().on('disconnect', () => {
            var address = socket.request.connection.remoteAddress;
            console.log('Connection lost with ' + address.split(":")[address.split(":").length - 1]);
            callback(this);
        });
    }

    send(command, message) {
        this.socket.emit(command, message);
    }

    broadcast(command, message) {
        this.socket.broadcast.emit(command, message);
    }
}

module.exports = Connection;
