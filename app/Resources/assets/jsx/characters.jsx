class Characters extends React.Component {
    render() {
        return (
            <h1 className="test-class">{this.props.title}</h1>
        )
    }
}

Characters.defaultProps = {
    title: 'Marvel Catalog - Characters List'
};
