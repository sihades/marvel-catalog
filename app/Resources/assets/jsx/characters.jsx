class CharacterListItem extends React.Component {
    render() {
        return (
            <li>
                <img
                    width="63"
                    height="50"
                    title={this.props.title}
                    src={this.props.src}
                />
                {this.props.text}
            </li>
        )
    }
}

class CharactersList extends React.Component {
    render() {
        let list = [];
        let items = JSON.parse(this.props.data);

        for (let i=0; i<Object.keys(items).length; i++) {

            list.push(<CharacterListItem
                title={items[i].name}
                src={items[i].thumbnail.path + '.' +  items[i].thumbnail.extension}
                text={items[i].id + ' - ' + items[i].name}
            />);
        }

        return (
            <ul>{list}</ul>
        )
    }
}

class Characters extends React.Component {
    render() {
        return (<div>
            <h1 className="test-class">{this.props.title}</h1>
            <CharactersList data={this.props.dataElement.attributes.value.value} />
        </div>)
    }
}

Characters.defaultProps = {
    title: 'Marvel Catalog - Characters List',
    dataElement: document.getElementById('characters-data')
};
